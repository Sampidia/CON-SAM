# Step-by-Step Guide: Deploying Sngine on Oracle Cloud Always Free

This guide takes you step-by-step through setting up your Oracle Cloud Free Tier instance and deploying your **connect.sampidia.com** Sngine project.

---

## Phase 1: Oracle Cloud Console Setup (Manual Steps)

### Step 1: Sign up for Oracle Cloud Free Tier
1. Go to [https://www.oracle.com/cloud/free/](https://www.oracle.com/cloud/free/) and click **Start for Free**.
2. Complete registration. *(Oracle asks for a credit card to prevent fraud; you will NOT be charged for Always Free resources).*

---

### Step 2: Create your Always Free Ampere (ARM) Instance
1. Log into your Oracle Cloud Dashboard.
2. In the top-left menu (≡), select **Compute** -> **Instances**.
3. Click **Create Instance**.
4. Configure the settings:
   * **Name**: `sngine-server`
   * **Placement**: Leave default Availability Domain.
   * **Image**: Click *Change Image* -> Choose **Ubuntu 22.04 LTS** or **Ubuntu 24.04 LTS**.
   * **Shape**: Click *Change Shape* -> Select **Ampere** -> `VM.Standard.A1.Flex`.
     * Set **OCPU count**: `2` or `4` (Always Free allows up to 4 OCPUs)
     * Set **Memory**: `12` or `24` GB RAM (Always Free allows up to 24 GB RAM)
   * **Networking**: Select *Create new virtual cloud network (VCN)*.
   * **SSH Keys**: Click **Save Private Key** (Download the `.key` / `.pem` file to your computer; you need this to log in).
   * **Boot Volume**: Check *Specify a custom boot volume size* -> Enter **100 GB** to **200 GB** (Always Free allows up to 200 GB storage).
5. Click **Create** and wait 1–2 minutes until the instance status turns **Running**.
6. Copy your server's **Public IP Address** (e.g. `132.145.xx.xx`).

---

### Step 3: Open HTTP (80) & HTTPS (443) Ports in Oracle VCN
Oracle Cloud blocks incoming web traffic by default at the cloud firewall level.

1. In the Oracle Cloud Console, go to **Networking** -> **Virtual Cloud Networks**.
2. Click on the VCN created for your instance (e.g. `vcn-...`).
3. Click on your **Public Subnet**.
4. Click on **Default Security List for vcn-...**.
5. Under **Ingress Rules**, click **Add Ingress Rules**:
   * **Source Type**: `CIDR`
   * **Source CIDR**: `0.0.0.0/0`
   * **IP Protocol**: `TCP`
   * **Destination Port Range**: `80,443`
   * **Description**: `Allow Web Traffic`
6. Click **Add Ingress Rules**.

---

## Phase 2: Connecting and Running the Server Setup Script

### Step 1: Connect via SSH
From your local terminal, run:
```bash
chmod 400 /path/to/your-private-key.key
ssh -i /path/to/your-private-key.key ubuntu@YOUR_ORACLE_PUBLIC_IP
```

---

### Step 2: Upload Project Files to Oracle VM
On your local machine, run `rsync` or `scp` to upload your project directory and SQL file to the server:
```bash
# Upload project code
rsync -avz -e "ssh -i /path/to/your-private-key.key" \
  "/home/afigo/Documents/My-App/connect sampidia/connect.sampidia.com" \
  ubuntu@YOUR_ORACLE_PUBLIC_IP:/tmp/

# Upload 472MB Database dump
rsync -avz -e "ssh -i /path/to/your-private-key.key" \
  "/home/afigo/Documents/My-App/connect sampidia/u0526974_connect.sql" \
  ubuntu@YOUR_ORACLE_PUBLIC_IP:/tmp/

# Upload deploy helper scripts
rsync -avz -e "ssh -i /path/to/your-private-key.key" \
  "/home/afigo/Documents/My-App/connect sampidia/deploy" \
  ubuntu@YOUR_ORACLE_PUBLIC_IP:/tmp/
```

---

### Step 3: Run the Automated Server Setup Script
SSH back into your Oracle server and execute:
```bash
chmod +x /tmp/deploy/*.sh
sudo /tmp/deploy/setup-server.sh
```
This script automatically installs Apache, PHP 8.3 with all extensions, MySQL 8.0, configures UFW & iptables firewall rules, and enables `.htaccess` rewrite rules!

---

### Step 4: Move Web Files & Import Database
On your server:
```bash
# Move web files to document root
sudo mkdir -p /var/www/html/connect.sampidia.com
sudo mv /tmp/connect.sampidia.com/* /var/www/html/connect.sampidia.com/
sudo chown -R www-data:www-data /var/www/html/connect.sampidia.com
sudo chmod -R 775 /var/www/html/connect.sampidia.com/content/uploads

# Import the 472MB Database
/tmp/deploy/import-db.sh "sngine_db" "sngine_user" "YOUR_SECURE_PASSWORD" "/tmp/u0526974_connect.sql"
```

---

### Step 5: Configure `includes/config.php`
Edit your configuration file on the server:
```bash
sudo nano /var/www/html/connect.sampidia.com/includes/config.php
```
Set the values:
```php
<?php
define('DB_NAME', 'sngine_db');
define('DB_USER', 'sngine_user');
define('DB_PASSWORD', 'YOUR_SECURE_PASSWORD');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');

define('SYS_URL', 'https://connect.sampidia.com'); // Or http://YOUR_ORACLE_PUBLIC_IP during testing
define('DEFAULT_LOCALE', 'en_us');
define('DEBUGGING', false);
define('LICENCE_KEY', 'YOUR_LICENCE_KEY');
```

---

### Step 6: Enable Free SSL Certificate (Domain Setup)
1. Point your domain A-record `connect.sampidia.com` to your **Oracle Public IP** in your DNS provider (e.g. Cloudflare / Namecheap / GoDaddy).
2. On your server, run:
```bash
sudo certbot --apache -d connect.sampidia.com
```
Follow the prompts, select redirect HTTP to HTTPS, and Certbot will automatically issue and install your SSL certificate!

---

## Complete! 🎉
Your Sngine social network application is now live on Oracle Cloud Always Free with 200GB disk space, 24GB RAM, zero monthly costs, and full SSL encryption.
