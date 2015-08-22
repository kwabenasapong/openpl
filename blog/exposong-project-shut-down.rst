.. title: ExpoSong Project Shut Down
.. slug: 2014/01/11/exposong-project-shut-down
.. date: 2014-01-10 23:01:26 UTC
.. tags: 
.. description: 

A few days ago another open source church worship project called
`ExpoSong <http://exposong.org/>`_ had to `shut
down <http://exposong.org/2014/01/08/eol-announcement/>`_. It seems to
me that they had a very small development team and were unable to
continue developing their software. ExpoSong's last release was over 2
years ago, in December 2011, and I can only presume they took a rain
check as 2014 came round and decided to officially stop the project
rather than leave it hanging.

It's very sad when an open source project has to shut down, but I can
completely understand their position. Without time or resources to
continue development, it is better to officially stop development rather
than leave it open in the dwindling hopes that someone may have the time
to continue at a later stage.

For those of you who have come from ExpoSong, I have put together a
step-by-step guide below to show you how to easily export all your songs
from ExpoSong and import them all into OpenLP.

Exporting Songs from ExpoSong and Importing Into OpenLP
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

First, in ExpoSong, click on **File > Export > Whole Library**.

|Export songs from ExpoSong|

Then select where you want to save your library file to.

|Select Location|

Once you have saved your file, open your file browser and navigate to
where the file is.

|Find exported file|

Select the file and rename its extension from ".expo" to ".tar.gz"

|Change File Extension|

Now you should have a "tarball" in your directory.

|Tarball|

Using an archive program (Windows users can use
`7-zip <http://www.7-zip.org/>`_, unzipping should be built in on Linux
and OS X), extract the contents of the "tarball".

|Extracted Archive|

If you enter into the extracted "pres" directory, you should see all of
your songs stored as ".xml" files.

|Song Files|

Now go into OpenLP, select **File > Import > Songs** and when you get to
the Song Format page of the Import Wizard, select OpenLyrics. Then use
the "Add Files" button to find the files you just extracted and add them
to be imported.

|Import into OpenLP|

Follow the rest of the prompts in the wizard to finish importing your
files.

.. |Export songs from ExpoSong| image:: /pictures/exposong_01_export_whole_library.png
.. |Select Location| image:: /pictures/exposong_02_export_whole_library.png
.. |Find exported file| image:: /pictures/exposong_03_export_whole_library.png
.. |Change File Extension| image:: /pictures/exposong_04_export_whole_library.png
.. |Tarball| image:: /pictures/exposong_05_export_whole_library.png
.. |Extracted Archive| image:: /pictures/exposong_06_export_whole_library.png
.. |Song Files| image:: /pictures/exposong_07_export_whole_library.png
.. |Import into OpenLP| image:: /pictures/exposong_08_export_whole_library.png

