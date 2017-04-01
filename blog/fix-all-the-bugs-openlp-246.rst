.. title: Fix All The Bugs! OpenLP 2.4.6
.. slug: 2017/04/02/fix-all-the-bugs-openlp-246
.. date: 2017-04-02 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/fix-all-the-bugs-openlp-246.jpg

Due to some differences between the various platforms we support, and some bug fixes for some of those platforms,
OpenLP 2.4.5 unfortunately introduced some bugs. Thankfully they were easy enough to pick up, and easy enough to fix.

In this bugfix release we also fixed a problem where the OpenLP database importer was dropping the author type, and a
problem with some of the core translations not being loaded.

Here is the complete list of bugs we fixed:

* Fixed a bug where the author type upgrade was being ignored because it was looking at the wrong table 
* Fixed a bug where the songs_songbooks table was not being created because the if expression was the wrong way round 
* Changed the songs_songbooks migration SQL slightly to take into account a bug that has (hopefully) been fixed 
* Sometimes the timer goes off as OpenLP is shutting down, and the application has already been deleted
* Fixed opening the data folder (KDE thought the old way was an SMB share) 
* Fixed a problem with the new QMediaPlayer not controlling the playlist anymore 
* Added importing of author types to the OpenLP 2 song importer 
* Fixed a problem with loading Qt's translation files
* Disabled the controls in the shortcut dialog unless a shortcut is actually selected

Go to the `downloads section`_ on our home page to download the latest version of OpenLP.


  "The Lord is my portion," says my soul, "therefore I will hope in him."
  
  Lamentations 3:24 (ESV)

[ Image Credit: `Overdrive repair 3 by Chris Ainsworth`_ ]

.. _downloads section: /#downloads
.. _Overdrive repair 3 by Chris Ainsworth: https://www.flickr.com/photos/driph/2860521147/
