.. title: OpenLP 2.2 Released!
.. slug: 2015/10/18/openlp-22-released
.. date: 2015-10-18 12:00:00 UTC
.. tags:
.. category:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/openlp-22-released.jpg

It's finally here! After almost three years in development, the next major version of OpenLP has arrived!

A lot of work has gone into making this new version more stable, less buggy and easier to use, resulting almost 300
bugfixes and improvements. This version also sees some changes under the hood, in terms of moving to Python 3 and adding
unit testing to increase the quality of the codebase.

New Features
^^^^^^^^^^^^

But, without further ado, here are the new features you'll find in OpenLP 2.2:

Songs
-----

* Show active song title in preview and live pane
* Allow authors to be tagged by their type (words music etc)
* CCLI SongSelect integration
* Importers

  * ProPresenter 4
  * Worship Assistant
  * PowerPraise
  * PresentationManager
  * EasyWorship Service Files (.ews)
  * WorshipCenter Pro

* Songbook can be displayed in footer
* Duplicate Songs can be identified and removed manually if required.
* An improve Formatting Tags user interface

Bibles
------

* New web bible: Neue evangelistische Übersetzung (German)
* Importers

  * Zefania XML format
  * OSIS importer rewritten

Presentations
-------------

* Support for presentations created in PDF format
* Support for LibreOffice 4 and 5

Projector Remote Control
------------------------

* Projectors that support the PJLink protocol can be controlled from OpenLP (On/Off/Blank/Source Select)

Images
------

* Can be placed in groups and added to services as groups.

Remote
------

* Supports SSL for all requests. Certificates will need to be created outside of OpenLP
* Supports Authentication for all update requests
* Display thumbnails and notes when available in the Web User Interface

Custom
------

* Auto load items from saved services
* Items can be created from the Service Manager for items like bibles

Media
-----

* Support for DVD and CD clipselection and playback (requires VLC).

Services
--------

* Items can be renamed
* Custom Items generated from Text items like bibles
* Media items can be configured to autoload and remove screen blank when added to live display
* Services can be saved without embedding media files. This will limit the portability of the files but reduces the file size (useful when media files are part of the service).

Internals
---------

* Upgraded the code to Python 3 from Python 2
* Refactored and improved the internals to:

  * Improve performance and start faster
  * Improve reliability of the media functionality
  * Increase testability and start to introduce a comprehensive test suite
  * Improve consistency of the settings

Important Notes
^^^^^^^^^^^^^^^

**OpenLP 2.2 is not backwards compatible with 2.0.5.**

**Service Files created in 2.2 cannot be opened in 2.0.**

Once you have upgraded from 2.0.5, version 2.0.5 cannot read the upgraded files. OpenLP 2.2 will make a backup on
startup, but it is recommended that you make your own backup too.

Upgrading from versions of OpenLP before 2.0.5 are not supported. You need to upgrade to 2.0.5 first, and make sure
you run OpenLP at least once before continuing to upgrade to 2.2.

There are some known issues in OpenLP 2.2 that you should know about before upgrading:

1. Live Backgrounds does not work on Windows and Mac OS X
2. Playback of linked audio does not work on Mac OS X

We plan to fix these issues in OpenLP 2.4. We're moving to a faster release cycle, which means that OpenLP 2.4 should be released in 6 to 12 months from now.

Thanks
^^^^^^

As leader of the project, I'd like to say a special thank you to the folks involved in this release. A special thank you to Tomas Groth, Jonathan Springer and Tim Bentley for their help, encouragement and preseverence.

    So he got up and went to his father. But while he was still a long way off, his father saw him and was filled with compassion for him; he ran to his son, threw his arms around him and kissed him.

    Luke 15:20, New International Version

.. raw:: html

    <div class="text-center"><p><a class="btn btn-success btn-lg" href="/#download"><strong>Download Now</strong></a></p></div>

[ Image Credit: `Thai Lanterns by Mark Fischer`_ ]

.. _Thai Lanterns by Mark Fischer: https://www.flickr.com/photos/fischerfotos/7455424224/
