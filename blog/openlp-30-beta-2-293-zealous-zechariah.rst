.. title: OpenLP 3.0 Beta 2 (2.9.3) Zealous Zechariah [UPDATED]
.. slug: 2021/09/05/openlp-30-beta-2-293-zealous-zechariah
.. date: 2021-09-05 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/openlp-30-beta-2-293-zealous-zechariah.jpg

.. warning::

   It appears that a bug crept in at the last minute, which prevents Bibles and Images from being added to the service.
   If you currently use either of these features, please stick with either the previous beta release, or with version
   2.4.6, which is the most current stable release. We hope to have a new release of OpenLP in a few weeks with this
   bug (and a few more) ironed out.


Yes! It's finally here! The second beta release of OpenLP 3.0 is available for download immediately.
Go and get it while it's hot!

From here on out, we will only be fixing bugs and making release candidates in an effort to get
version 3.0 out the door.

.. tip::

   Installing this version of OpenLP will override any other installation of OpenLP you already
   have. Please `make a backup`_ of your data!

New Features
------------

Here are some of the fancy new features in this release:

* Better dark mode
* Folders in Media and Presentations
* Various Webserver changes to support the remote interface.
* Quick access to the help through the "?" icon on a number of windows
* High DPI scaling for 4k monitors
* Improved media handling
* Updated display mode toggle system
* Add slide numbers in footers
* Allow sub directories in custom stages
* Make images fullscreen

Bug Fixes
---------

Of course, this release also packs a ton of bug fixes and enhancements:

* Fix merging of song books 
* Fix replacing the incorrect service entry when the live item was changed externally (#881)
* Fix some issues with the alerts
* Handle window changes more gracefully
* Fix icons in print when using a dark theme
* Fix data directory copy fail 
* Various fixes around presentations
* Various fixes for the remote API and the web remote
* Fix preview video restart after pause or stop
* Fix some bugs in the CCLI/SongSelect import
* Fix missing image service load crash
* Fix a bug where drag-and-drop images are loaded twice.
* Fix chapter count for Zechariah
* Fix a few other issues with Bibles
* Fix reset footer template


   And let us not grow weary of doing good, for in due season we will reap, if we do not give up.

   Galatians 6:9 ESV


Downloads
---------

.. raw:: html

   <div class="text-center" style="margin-bottom: 2em">
    <div class="btn-group">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-windows"></i>
        Windows
        &nbsp;
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="https://get.openlp.org/2.9.3/OpenLP-2.9.3-x64.msi">64-bit Installer</a></li>
        <li><a href="https://get.openlp.org/2.9.3/OpenLPPortable_2.9.3.0-x64.paf.exe">64-bit Portable</a></li>
        <li><a href="https://get.openlp.org/2.9.3/OpenLP-2.9.3.msi">32-bit Installer</a></li>
        <li><a href="https://get.openlp.org/2.9.3/OpenLPPortable_2.9.3.0-x86.paf.exe">32-bit Portable</a></li>
      </ul>
    </div>
    <a class="btn btn-default" href="https://get.openlp.org/2.9.3/OpenLP-2.9.3.dmg">
      <i class="fa fa-apple"></i> macOS 10.12+
    </a>
    <a class="btn btn-ubuntu" href="https://get.openlp.org/2.9.2/openlp_2.9.2-1_all.deb">
      <img class="icon notranslate" src="/images/ubuntu-logo.png"/> Ubuntu
    </a>
    <a class="btn btn-debian" href="https://get.openlp.org/2.9.2/openlp_2.9.2-1_all.deb">
      <img class="icon notranslate" src="/images/debian-logo.png"/> Debian
    </a>
    <a class="btn btn-fedora" href="https://copr.fedorainfracloud.org/coprs/trb143/OpenLP/">
      <img class="icon notranslate" src="/images/fedora-logo.png"/> Fedora
    </a>
    <a class="btn btn-success" href="https://get.openlp.org/2.9.3/OpenLP-2.9.3.tar.gz">
      <i class="fa fa-file-archive-o"></i> Source
    </a>
   </div>

.. _make a backup: https://manual.openlp.org/backing_up.html 
