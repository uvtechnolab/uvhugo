---
title: "Sharing your limited hotel wifi network"
date: 2014-11-27T15:27:17+06:00
draft: false
# page title background image
bg_image: "images/backgrounds/page-title.jpg"
# meta description
description : "Post about sharing a limited hotel wifi network"
# post thumbnail
image: "images/blog/post-1.jpg"
# post author
author: "Chris Van Bael"
# taxonomy
categories: ["OnTheRoad"]
tags: ["OnTheRoad", "Tips"]
# type
type: "post"
---



Sometimes you stay at a hotel and they provide you with a free or paid Wifi connection. However, it is limited to only one device. And there you stand with your phone (data is too expensive since you are roaming), tablet (perhaps only Wifi available) and laptop…

No worry, open source to the rescue!

**Step 1: Buy a DD-WRT compatible router.**

For example a TP-Link TL-WR841N for something like 20 euros. If you already have a router, but you are not sure if it is DD-WRT compatible, look it up in [their database](http://www.dd-wrt.com/site/support/router-database).

**Step 2: Install DD-WRT**

Find the correct download files.  For the TP Link you can find them at their site.
Next steps are:  
* Make a cabled connection between your laptop/pc and the router. Disable wireless on your laptop.
* Plug in the router and turn it on
* Get a new IP address on your laptop. Open a command prompt on your laptop and enter:  
`ipconfig /release`  
`ipconfig /renew`  
* Point your webbrowser to http://192.168.0.1
* Go to system tools – firmware upgrade. Select **factory-to-ddwrt.bin** and upgrade. When done, reboot the router.
* Get a new IP address on your laptop. Open a command prompt on your laptop and enter:  
`ipconfig /release`  
`ipconfig /renew`  
* Now point your webbrowser to http://192.168.**1**.1 (note the change)
* Set a new password
* Navigate to administration, firmware upgrade. Log in again if needed. Click browse. Select **tl-wr841nd-webflash.bin**. Click upgrade and reboot when done.  

Congratulations, your router is now running DD-WRT!


**Step 3: Configure your DD-WRT router to share the Wifi connection**

The goal is to have the router log on to the hotel network with the settings they gave you and create a virtual interface to create a new wireless network for your devices.

Based on the default configuration, change following settings:

* **Wireless tab, Wireless Physical Interface:**  
Wireless mode:client, save  
Wireless Network Name: [SSID of the hotel network], save  

* **Wireless tab, Virtual Interfaces:** (you may need to add a virtual interface)  
Wireless Mode: AP  
Wireless Network Name: MyNetwork  
Wireless SSID Broadcast: enable, save  

* **Wireless tab, Wireless security:**  
Physical Interface [SSID of the hotel Wifi]: [password of the hotel network] and save  
Virtual Interfaces [MyNetwork]: WPA2 personal, AES  
WPA Shared Key: [enter here the password you want for MyNetwork], save  

* **Setup tab, Basic Setup:**  
WAN Connection Type: Automatic – DHCP, save  

* **Network Address Server Settings: DHCP Server:**  
DHCP Server: enable, save  
DNSMasq for DHCP, DNSMasq for DNS, DHCP-Authoritative: all yes, save  
NTP client enable, UTC+1 (for ttraff daemon), save  

* **Setup tab, Advanced routing:**  
Operating Mode: gateway, save  

* **Services tab:**  
DNSMasq: enable  
Local DNS: disable  
NO DNS rebind: enable  
ttraff daemon: enable, save  

* **Security tab:**  
disable all checkmarks, save  
SPI firewall: disable, save  

* **Administration tab:**  
Reboot Router  

Since the MyNetwork wireless network will only be available when the router can connect to the hotel network, you have to bring a network cable to connect your laptop to the router.  If you change hotel, connect the laptop with the cable (refresh the IP) and change the SSID and password of the ath0 interface. Your settings for MyNetwork can stay the same.

It might also happen that you need to fill in a name and a password on a webpage. Once when my laptop was connected via the router, the forwarding to that login page didn’t work. Connect your laptop directly to the hotel Wifi network and see to which page it is forwarded. DO NOT FILL IN THE PASSWORD, but copy the URL.  
Now connect your laptop back to the router MyNetwork and paste the URL for the login page and log in.  All devices should now be able to use the hotel network.
