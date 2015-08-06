.. title: openlp.org 1.2.4 released!
.. slug: 2010/01/25/openlporg-124-released
.. date: 2010-01-25 09:01:24 UTC
.. tags: 
.. description: 

Yet another bugfix release. This one, however, pulls in a fix for a bug
in an external component use to import CSV bibles, and does some fancy
footwork around PowerPoint (again).

Here's a complete list of fixes:

-  Corrected the Bible CSV import bug where verses containing comma's
   were not imported properly
-  Added \*.mp4 to the list of video file extensions
-  Powerpoint XP compatibility updated
-  Changed Powerpoint handling so that if an instance of Powerpoint is
   already running at startup, that is used instead of trying to create
   a new instance. Also, in this case, Powerpoint will not be shut down
   when OpenLP closes
-  Fixed Author import bug from .usr SongSelect files

As usual, you can get the latest file from the download page!
