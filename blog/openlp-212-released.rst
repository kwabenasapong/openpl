.. title: OpenLP 2.1.2 Released
.. slug: 2015/01/25/openlp-212-released
.. date: 2015-01-25 16:01:09
.. tags:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/openlp-212-released.jpg

Welcome to OpenLP 2.2 beta 2, otherwise known as version 2.1.2!

This release comes stuffed full of fixes and enhancements, with 66 bugs fixed, improving the usability of OpenLP.

Some of the most significant changes are:

* First Time Wizard: various improvements to Internet connectivity related issues
* Interface layout improvments
* Updated translations (now is the time to start translating OpenLP 2.2!)
* Improved database upgrade to help with the migration from 2.0 to 2.2 series.

The full list can be found at `Launchpad.net`_

Important Notes
^^^^^^^^^^^^^^^
OpenLP 2.1.2 is **not backwards compatible** with 2.0.5. Once you have upgraded from 2.0.5, version 2.0.5 cannot read the upgraded files. OpenLP 2.1.2 will make a backup on startup, but it is recommended that you make your own backup too.


Upgrading from versions of OpenLP before 2.0.5 are not supported. You need to upgrade to 2.0.5 first, and make sure you run OpenLP at least once before continuing to upgrade to 2.1.2

This is a beta release, which means it is not yet finished and likely to still contain a few bugs. Please test it out as much as you can (using a Portable build on Windows is a good way to do this) and report the bugs you find.

Service Files created in 2.1.2 cannot be opened in 2.0

System Requirements
-------------------
OpenLP's system requrements have been upgraded since the 2.0.5 release. We have had to drop older operating systems in order to take advantage of newer features not available in older operating systems. Please take note:

* Windows Vista and up
* Mac OS  X 10.8 and up
* Ubuntu 14.04 and 14.10
* Fedora 21

.. raw:: html

    <p style="text-align: center; font-size: 150%;"><a href="http://openlp.org/download" title="Download OpenLP Now!">Download Now</a></p>

[ Image Credit: `Lady Bird by Samuel Johnson`_ ]

.. _Launchpad.net: https://launchpad.net/openlp/trunk/2.1.2
.. _Lady Bird by Samuel Johnson: https://www.flickr.com/photos/samjuk/1129257862/
