.. title: Tips on Android App Setup for OpenLP
.. slug: 2013/05/08/tips-android-app-setup-openlp
.. date: 2013-05-08 15:05:44 UTC
.. tags: 
.. description: 

|Android|

The Android app for OpenLP adds some nice fexibility to the operation of
OpenLP. I personally use this to add songs "on the fly" from the stage
on Sunday mornings. It is also useful for speakers that want to control
what is being displayed and I'm sure many many other uses. We have
recently had a few questions about the remote feature and the setup. You
can find detailed instructions in the `OpenLP
documentation <http://manual.openlp.org/configure.html#remote>`_ and
also info for the `Android
app <http://manual.openlp.org/android.html#android>`_.

Networking Basics
-----------------

Before we get to the tips, we need to be sure have a good understanding
of some basic networking terms.

**IP Address**
  This is the unique number that is given to a computer on
  a network. Think of this as a street address of a house. On most local
  networks It will look something like this: 192.168.1.100.

**LAN**
  Local Area Network, this is the local network. If you have a
  typical home setup with a modem and a wireless router the wireless
  router connects all the computers and assings IP addresses on the LAN.
  Many users have confused the LAN with the internet. A LAN doesn not have
  to be connected to the internet at all, it simply provides a way for
  several close by computers to communicate. A LAN is all that is needed
  for the remote feature of OpenLP to work.

**WiFi**
  this is the means that you connect to a Local network
  wirelessly. Again, this does not mean you are connected to the internet.

Now, to the tips...

Get on the Same Network
-----------------------

Many people use the Android app on their mobile phone. One of the most
common issues I have ran into when someone is running the remote app is
they are not on the network that the OpenLP machine is on. For most
setups this means you need to be on the same WiFi network that the
OpenLP machine is on.

Connect to the Correct IP Address
---------------------------------

Most networks use
`DHCP <http://en.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol>`_
to hand out IP addresses, this means your OpenLP machine may not have
the same IP address every week so it may be necessary to check that if
you cannot connect with your device. You can find the IP address from
the `remote
settings <http://manual.openlp.org/_images/configureremotes.png>`_\ screen
in OpenLP. You can also find the IP address by entering the command
"ipconfig" in the command prompt in Windows, or by the commands "ip a"
or "ifconfig" on most Mac, Linux, and BSD machines. You can also find
your OpenLP computer if you know its
`hostname  <http://en.wikipedia.org/wiki/Hostname>`_ on your Android
device by using an app such as
`eZNetScan <https://play.google.com/store/apps/details?id=com.vrsspl.eznetscan&hl=en>`_.

Be Sure to Apply Your Settings
------------------------------

If you need to change your IP address on the Android app be sure to tap
the Activate button to activate the changes. 

Consider a Static IP Address
----------------------------

A static IP address will help keep you from having a lot of these
issues. This may not always be possible, another way to achieve
something close to this is using a tool most routers have to reserve
dhcp addresses usually bound to the `MAC
address <http://en.wikipedia.org/wiki/MAC_address>`_ of a computer.
Check your routers documentation but this is usually a pretty simple
process.

.. |Android| image:: /pictures/android_logo.gif

