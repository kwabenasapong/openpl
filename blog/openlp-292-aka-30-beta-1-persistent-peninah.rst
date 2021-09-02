.. title: OpenLP 2.9.2 aka 3.0 Beta 1 - Persistent Peninah
.. slug: 2020/12/21/openlp-292-aka-30-beta-1-persistent-peninah
.. date: 2020-12-21 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/openlp-292-aka-30-beta-1-persistent-peninah.jpg

As the song says "Come now is the time to - test a new version of OpenLP!"

Apart from some select as-yet implemented features, this beta contains all the features that will be in the
final release of OpenLP 3.0. This beta release should be stable enough for people to try it out and report back
any bugs they encounter. Please make sure you know how to generate a `debug log file`_ and submit a log file when
something goes wrong.

.. warning::

   Installing this version of OpenLP will override any other installation of OpenLP you already have. Please
   `make a backup`_ of your data!

Of course there are a ton of bug fixes across the board, including fixes in some of the song importers, fixes in
handling videos, presentations as well as fixes to the web Bibles.

New Features
------------

* Keynote and PowerPoint support for macOS
* New web remote version (upgrade by visiting Settings -> Remotes)
* Fixed SongSelect importer -- it now opens an internal web browser
* A better dark mode on Windows 10
* Native dark mode on macOS

.. note::

   All bugs (not feature requests) from previous releases will be closed, and only bugs from this
   release moving forward will be tracked.

Known issues
------------

* Using a video / streaming background theme prevents playback of audio linked to to songs

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
        <li><a href="https://get.openlp.org/2.9.2/OpenLP-2.9.2-x64.msi">64-bit Installer</a></li>
        <li><a href="https://get.openlp.org/2.9.2/OpenLPPortable_2.9.2.0-x64.paf.exe">64-bit Portable</a></li>
        <li><a href="https://get.openlp.org/2.9.2/OpenLP-2.9.2.msi">32-bit Installer</a></li>
        <li><a href="https://get.openlp.org/2.9.2/OpenLPPortable_2.9.2.0-x86.paf.exe">32-bit Portable</a></li>
      </ul>
    </div>
    <a class="btn btn-default" href="https://get.openlp.org/2.9.2/OpenLP-2.9.2.dmg">
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
    <a class="btn btn-success" href="https://get.openlp.org/2.9.2/OpenLP-2.9.2.tar.gz"><i class="fa fa-file-archive-o"></i> Source</a>
   </div>

Other notable changes and bug fixes
-----------------------------------

* Powerpoint fixes 
* Relicense GPL-2 files 
* Fix the CrossWalk Biblestudytools.com importer 
* Fix two bugs in the MediaShout importer 
* Fix image db upgrade 
* Add footer to the object returned in the api 
* Re-add custom stage view support 
* Expose the entire ServiceItem in the API 
* Remove and add screens without reloading screens
* Allow XML processing istructions in OpenLyrics importer 
* Revert recently introduced bug causing video background to be on top of lyrics. The crash this was supposed to fix is no longer present. 
* Fix the colour of the icons on macOS 
* Set default header and footer areas if not overridden 
* Scale service save progress increments to thousandths 
* Fix incorrect image title from loading service 
* Fix Image Backgrounds and remove Image Manager 
* Upgrade and cleanup WebSocket code 
* Various alpha2 fixes 
* Update API definition 
* Settings cleanup

.. _debug log file: https://manual.openlp.org/troubleshooting.html#i-have-been-asked-to-email-a-debug-log-where-do-i-find-this
.. _make a backup: https://manual.openlp.org/backing_up.html
