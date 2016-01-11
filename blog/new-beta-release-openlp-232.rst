.. title: New Beta Release: OpenLP 2.3.2
.. slug: 2016/01/10/new-beta-release-openlp-232
.. date: 2016-01-10 21:39:02 UTC
.. tags:
.. category:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/new-beta-release-openlp-232.jpg

We're really happy to announce our first beta release of the upcoming OpenLP 2.4.

You might think this is really soon after the last release, and it is true. We are having to accelerate our release to
move to PyQt5 due to a packaging problem on Debian, Ubuntu, Mint and other Linux distributions. As of today, OpenLP is
no longer in the Debian repository because a package it relies on has been removed.

We're long overdue moving to Qt5 as it is, so this just means we're moving to Qt5 a little sooner than we had
anticipated.

A number of features have been added, and some bugs fixed, in this release:

* Removed unnecessary ‘?’ help buttons, and fixed the remaining ones
* Double verses at end of song now show correctly on stageview
* Ctrl-F selects all text in the search field
* Verse order can now be either upper or lower case (e.g. "v1 v2 v3" or "V1 V2 V3")
* Songbooks now support multiple songbook entries
* Fixed various issues with song importers

While version 2.3.1, the first alpha, was release, we didn't blog about it. The following updates were released in 2.3.1:

* Upgrade to PyQt5 from PyQt4
* Add proper shortcuts for Mac OS X
* Don't hide the dock and menu bar on Mac OS X when using only a single screen
* Allow the display to drop below the main window when using only a single screen on Mac OS X
* VLC not available after upgrade to 2.2
* Improve the notificaions of deletion of themes when used by Plugins
* All the implementation of custom stage.css ouside core code
* Fix Alert with line break from remote so it does not fail from Remote Interface
* Amend Search as you type settings as configured to use wrong Settings Tab
* Unable to distinguish between songs with the same title in Remote Interface
* Allow Print service change font size by allowing configurable style sheets
* Fix images disappearing from images list
* Better Labeling on Menus and Labels.
* Add support for song import from VideoPsalm

Downloads
---------

You can download OpenLP 2.3.2 from our `developer site`_. The download button below will take you to the downloads page.

.. raw:: html

    <p class="text-center"><a href="https://openlp.io/downloads.html" class="btn btn-success btn-lg"><i class="fa fa-fw fa-download"></i> Download OpenLP 2.3.2</a></p>

[ Image Credit: `Re-worked Old'un - 4 by Barry Lewis`_ ]

.. _developer site: https://openlp.io/
.. _Re-worked Old'un - 4 by Barry Lewis: https://www.flickr.com/photos/16179216@N07/14997099844/

