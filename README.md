# vIdja smart lamp

Smart lamp project making use of [Ikea vidja lamp](http://www.ikea.com/gb/en/products/lighting/floor-lamps/vidja-floor-lamp-white-art-80309203/), Raspberry Pi, ws2812b led strip, and apache web server to control via browser.


## Installation

Eventually use this to make an install script. In the meantime, as follows;

**Setup ws2812b control**
	- Run full update and upgrade  `sudo apt update && sudo apt full-upgrade`  
	- `git clone https://github.com/jgarff/rpi_ws281x`
	- `git clone https://github.com/craio/vidja`
	- `sudo apt install scons -y`
	- `cd rpi_ws281x`
	- `nano main.c` to 240 height x 1 width
	- `scons`
	- `cd python`
	- `sudo python ./setup install`
	- Test with `sudo python ~/vidja/assets/scripts/Rainbow.py`
	- Test with `sudo python ~/vidja/assets/scripts/Wipe.py`

**Setup webserver control**
	- `sudo apt install apache2 php libapache2-mod-php -y`
	- `sudo rm /var/www/html/index.html`
	- `cd ~/vidja`
	- `sudo ln -s * /var/www/html`
	- `sudo visudo /etc/sudoers`
	- Add `www-data ALL=(ALL) NOPASSWD: ALL` at the bottom
	- `sudo reboot now`


## Links

I've used bits from all these sources to make this project, they did the hard work.
- https://learn.adafruit.com/adafruit-neopixel-uberguide/the-magic-of-neopixels
- https://tutorials-raspberrypi.com/connect-control-raspberry-pi-ws2812-rgb-led-strips/
- https://learn.adafruit.com/neopixels-on-raspberry-pi/overview
- https://github.com/jgarff/rpi_ws281x
- https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md
