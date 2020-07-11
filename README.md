# vIdja smart lamp

Smart lamp project making use of [ikea vidja lamp](http://www.ikea.com/gb/en/products/lighting/floor-lamps/vidja-floor-lamp-white-art-80309203/), Raspberry Pi, ws2812b led strip, and apache web server to control via browser.


## Installation

Eventually use this to make an install script. In the meantime, as follows;

**Setup ws2812b control**   
	- Run full update and upgrade  `sudo apt update && sudo apt full-upgrade`    
	- put ssh key in `~/.ssh`    
	- `chmod 400 ~/.ssh/id_rsa`    
	- `git clone https://github.com/jgarff/rpi_ws281x`    
	- `git clone git@github.com:Craio/vidja.git `   
	- `sudo apt install scons swig -y`   
	- `cd ~/rpi_ws281x`   
	- `nano main.c` to 240 height x 1 width    
	- `scons`    
	- `cd python`    
	- `sudo python ./setup.py install`    
	- Test with `sudo python ~/vidja/lamp/assets/scripts/Rainbow.py`    
	- Test with `sudo python ~/vidja/lamp/assets/scripts/Wipe.py`     

**Setup webserver control**   
	- `sudo apt install apache2 php libapache2-mod-php -y`    
	- `sudo rm /var/www/html/index.html`    
	- `cd ~/vidja`    
	- `sudo cp -r * /var/www/html`    
	- `sudo visudo /etc/sudoers`    
	- Add `www-data ALL=(ALL) NOPASSWD: ALL` at the bottom    
	- `cd /var/www/html/lamp/assets/scripts/`    
	- `sudo chown www-data:www-data *`     
	- `sudo reboot now`    
	- Check ip with `ifconfig`, point browser to address      

## Links

I've used bits from all these sources, and many others to make this project, they did the hard work.
- https://learn.adafruit.com/adafruit-neopixel-uberguide/the-magic-of-neopixels
- https://tutorials-raspberrypi.com/connect-control-raspberry-pi-ws2812-rgb-led-strips/
- https://learn.adafruit.com/neopixels-on-raspberry-pi/overview
- https://github.com/jgarff/rpi_ws281x
- https://www.raspberrypi.org/documentation/remote-access/web-server/apache.md

## To do
- Add colorpicker
- Write install script
- Rework web control
- Add wiring documentation
