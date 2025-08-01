Website hosting info pages for Project: StormCore

## Setup
In order to setup, you must first run `/internal/create_structure.php` whilst `internal/setupkillswitch` doesn't contain `1`.

## Running
Run the command `php -S 0.0.0.0:80 router.php` while in the directory.

## Installation on Linux Bazzite or Fedora
```bash
toolbox create
toolbox enter
sudo dnf install php
cd /path/to/folder/
sudo dnf install gh
gh auth login
gh repo clone Patric-k-k/ProjectStormCore.work.gd
cd ProjectStormCore.work.gd/
sudo php -S 0.0.0.0:5000 router.php
```
## Install on Windows
- Download PHP (https://www.php.net/downloads.php)
- Run `winget install --id GitHub.cli`
- Go to a directory.
- Run the following commands:
```
gh auth login
gh repo clone Patric-k-k/ProjectStormCore.work.gd
cd ProjectStormCore.work.gd/
php -S 0.0.0.0:80 router.php
```
