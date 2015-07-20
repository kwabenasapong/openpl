.. title: New Beta Release: 2.1.3
.. slug: 2015/02/22/new-beta-release-213
.. date: 2015-02-22 17:02:00 SAST
.. tags:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/new-beta-release-213.jpg

Hooray! It's another release of OpenLP!

Brought to you by much blood and sweat and tears (OK, maybe only the sweat part), is version 2.1.3, the 3rd beta in our 2.2 series. As with the previous release, this is a bugfix-only release, with the focus on getting to a 2.2 release.

There are over 30 bugs fixed in this release, including:

* 2.1.2 Traceback on Presentations for MAC
* Remote password protection doesn't work with https off
* OSX: OpenLP does not start without phonon
* Preview media slider repeatedly shows "Error Occurred" dialogue box
* Exception when saving a service
* non-ascii characters in file path of images and presentation causes traceback
* The FTW fails when network is disconnected during download
* Previewing media item interferes with live media item
* Corrupted databases stop OpenLP from starting
* Traceback in czech bible download
* Slide preview viewer pane
* Bible download from crosswalk fails because crosswalk has updated their layout
* Traceback when playing media with no players available/enabled
* Several bibles missing in download.cfg
* Select Translation Dialog missing icon
* No cancel button on FTW "No inetrnet page"
* Bible quick search to end does not work
* Thumbnail of images isn't shown in stage view and remote control
* When deleting a presentation from the mediamanager the cursor remains busy
* Importing certain presentation manager pro files fails
* Consider moving the delete option in the right click menu to the bottom of the menu.
* Some disk errors are not being caught
* Zefania bible imports all books as "Genesis" if book name is missing
* One failed download stops first run wizard
* Remove support for .theme files
* Second Bible verse separation
* Traceback when importing CSV bibles
* Traceback in FTW on download error (404)
* After downloading KJV through FTW, searching in KJV causes traceback
* Double clicking item in preview adds to service instead of sending live
* Alert is displayed on a single screen when "Display on a single screen" is not checked

Important Notes
---------------
OpenLP 2.1.3 is **not backwards compatible** with 2.0.5. Once you have upgraded from 2.0.5, version 2.0.5 cannot read the upgraded files. OpenLP 2.1.3 will make a backup on startup, but it is recommended that you make your own backup too.

Upgrading from versions of OpenLP before 2.0.5 are not supported. You need to upgrade to 2.0.5 first, and make sure you run OpenLP at least once before continuing to upgrade to 2.1.3

This is a beta release, which means it is not yet finished and likely to still contain a few bugs. Please test it out as much as you can (using a Portable build on Windows is a good way to do this) and report the bugs you find.

Service Files created in 2.1.3 cannot be opened in 2.0

System Requirements
-------------------

OpenLP's system requrements have been upgraded since the 2.0.5 release. We have had to drop older operating systems in order to take advantage of newer features not available in older operating systems. Please take note:

* Windows Vista and up
* Mac OS  X 10.8 and up
* Ubuntu 14.04, 14.10 and 15.02
* Fedora 21

| I lift up my eyes to the hills.
|     From where does my help come?
| My help comes from the Lord,
|     who made heaven and earth.
|                        Psalm 121

.. raw:: html

   <p style="text-align: center; font-size: 150%;"><a href="http://openlp.org/download" title="Download OpenLP Now!">Download Now</a></p>

