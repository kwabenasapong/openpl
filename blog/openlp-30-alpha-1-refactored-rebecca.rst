.. title: OpenLP 3.0 Alpha 1: Refactored Rebecca
.. slug: 2019/12/22/openlp-30-alpha-1-refactored-rebecca
.. date: 2019-12-22 08:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/openlp-30-alpha-1-refactored-rebecca.jpg

At long last, we are proud to announce the first alpha release of OpenLP 3.0!

The biggest new feature in version 3.0 is the new renderer. Still based in HTML, but using the new Chrome-based
QtWebEngine component, it should deliver much better performance, and it also enables us to offer something people have
been requesting for a long time: transitions!

    But the wheat and the spelt were not ruined, for they ripen late.

    Exodus 9:32

.. warning::
   This is a preview of the next version of OpenLP. It is unstable, there are bugs, it will crash. DO NOT use it on any
   system you need to depend on. We cannot be held responsible for your data loss. Once you have installed OpenLP 3.0,
   your data will be upgraded, and you will be unable to return to OpenLP 2.4.6. Do not upgrade unless you are sure you
   don't need version 2.4.6 any more. This version of OpenLP will overwrite your current installation.

Below is a list of known issues, new features, enhancements to existing features, and bug fixes. Download links are at
the bottom of this article.

Known Issues
------------
* Disable BibleServer support for now
* Remote API is still unstable
* Old web remote doesn't work, new one on the way
* ``QCollatorKey`` error when loading services created by OpenLP 2.4.6
* After installing on Windows OpenLP does not start automaticly even though "Launch OpenLP" is checked

New Features
------------
* Implemented a new renderer
* Transitions in themes
* Drop all media players other than VLC
* Planning Center plugin
* New screen selection widget
* New icons
* New song importers:

  - Singing The Faith
  - LiveWorship
  - ProPresenter 5 and 6
  - EasyWorship 6

* New Bible importers:

  - SWORD
  - WordProject

* Searching by Song Number
* Guitar chords (in ChordPro format)
* Update license GPL version 3 or higher
* Added a Zeroconf service to aid devices detecting OpenLP on the network
* Video changes

  - Ability to show Streaming
  - Sound for Preview 
  - Ability to loop videos
  - Show video time and how long it has played

* Support Impress for presentations on macOS via Pyro4
* Support PJLink2 specification for projector control
* New dark theme for OpenLP
* Global proxy settings
* Totally new internal API server 
* Added SongBook name, Song Number and Alternative Title to "Entire Song" search
* Support more fields in song search: topic, copyright, CCLI number search
* Natural sorting for song book searches
* Revamped the Bible tab interface in the Library
* New logo and branding!

Enhancements
------------
* Refactored how settings work
* Better layouts in Theme wizard
* Better parsing of scripture references
* Sort the authors when exporting the songs
* Alerts are now able to scroll
* Update the about dialog
* Updated translations
* Some performance enhancements
* Add epub, cbz, and fb2 support to pdf controller
* Catch some errors to provide user friendly error messages
* Replace PyICU with PyQt's QCollator
* Add proxy settings button to First Run Wizard
* Remove proxy settings from individual bibles and use the central OpenLP proxy server settings.
* Use appdirs instead of pyxdg
* Raise minimum Python version to 3.6
* Implement natural sort for authors, topics, songbooks, themes
* Added QR code and link for iOS app to remote plugin ui
* Hide the splash screen when a message shows during startup
* Hide the Projectors manager by default so that it doesn't confuse people

Plus a whole lot of code cleanup and feature streamlining...

Bug Fixes
---------
* Fix window titles so that the main window just says 'OpenLP'
* Update the translation process files and fix issues
* Use PyMySQL rather than MySQL Connector
* Fix service Print code
* Fix deleting song books
* Fix bible reference search when text matches multiple books
* Strip unwanted formatting characters when pasting into song editor
* Word of Worship file importer fixes / rework
* Fix choruses, bridges & etc. being imported as verses in CCLI txt files
* Attempt to remove/reduce circular imports
* Fix dvd clip selection
  
Tons and tons of other minor bug fixes

Downloads
---------

Windows:
~~~~~~~~
.. raw:: html

   <a href="https://get.openlp.org/2.9.0/OpenLP-2.9.0-x64.msi" class="btn btn-primary"><i class="fa fa-windows"></i> Windows 7+</a>
   <a href="https://get.openlp.org/2.9.0/OpenLP-2.9.0.msi" class="btn btn-primary"><i class="fa fa-windows"></i> Windows 7+ (32-bit)</a>
   <a href="https://get.openlp.org/2.9.0/OpenLPPortable_2.9.0.0-x64.paf.exe" class="btn btn-primary"><i class="fa fa-windows"></i> Windows Portable</a>
   <a href="https://get.openlp.org/2.9.0/OpenLPPortable_2.9.0.0-x86.paf.exe" class="btn btn-primary"><i class="fa fa-windows"></i> Windows Portable (32-bit)</a>

macOS:
~~~~~~
.. raw:: html

   <a href="https://get.openlp.org/2.9.0/OpenLP-2.9.0.dmg" class="btn btn-default"><i class="fa fa-apple"></i> macOS 10.13+</a>

Linux:
~~~~~~
.. raw:: html

   <a href="https://get.openlp.org/2.9.0/openlp_2.9.0-1_all.deb" class="btn btn-ubuntu"><img src="/images/ubuntu-logo.png" class="icon notranslate"> Ubuntu</a>
   <a href="https://get.openlp.org/2.9.0/openlp_2.9.0-1_all.deb" class="btn btn-debian"><img src="/images/debian-logo.png" class="icon notranslate"> Debian</a>
   &nbsp;&nbsp;&nbsp;Fedora coming soon!

..   <a href="https://get.openlp.org/2.9.0/Openlp-2.9.0.dmg" class="btn btn-fedora"><img src="/images/fedora-logo.png" class="icon notranslate"> Fedora</a>
..   <a href="https://get.openlp.org/2.9.0/Openlp-2.9.0.dmg" class="btn btn-arch"><img src="/images/archlinux-logo.png" class="icon notranslate"> Arch</a>

Source Code:
~~~~~~~~~~~~
.. raw:: html

   <a href="https://get.openlp.org/2.9.0/openlp-2.9.0.tar.gz" class="btn btn-info"><i class="fa fa-code"></i> Source Code</a>
