.. title: News Flash: Jumping Jonah Out The Fish's Mouth
.. slug: 2011/01/08/news-flash-jumping-jonah-out-the-fishs-mouth
.. date: 2011-01-08 18:01:22 UTC
.. tags: 
.. description: 

**IMPORTANT NOTE FOR WINDOWS USERS**

Please note, if you're using Windows, you need to *uninstall the previous version of
OpenLP*. We upgraded some of the components used in OpenLP and there
seems to be a conflict on Windows, as reported by some users.

Yes folks, we've done it again! Here is another pre-release
release of OpenLP 2.0. We're very excited to bring you OpenLP 1.9.4
Alpha 4, codename "Jumping Jonah".

**PLEASE REMEMBER TO READ THE FREQUENTLY ASKED QUESTIONS BEFORE USING AN
ALPHA RELEASE**

Some of the new features in this release are...

-  New search box for songs
-  Song re-indexing tool
-  SongBeamer import
-  Importing songs from the service file
-  openlp.org 1.x Bibles added to Bible import wizard
-  An additional web download Bible source
-  Auto-completion of Bible book names in the Quick Search
-  Brand new theme wizard
-  Resizing of preview panes as per openlp.org 1.x
-  A new shortcuts dialog, though it is not yet functional
-  Bug report dialog now hooks into your e-mail client

**PLEASE RUN THE NEW SEARCH RE-INDEX TOOL AFTER UPGRADING**

Not only do we have all these new features, but a couple of our testers
have started writing a reference manual for OpenLP 2, which can be seen
on our new manual site. They are continuously working on it, and as they
update it we update the new manual site with their latest work.

We also tried to put a lot of polish into this release, cleaning up
bugs, making OpenLP work better behind the scenes, tweaking the GUI,
etc. Our list of open bugs has grown since Alpha 3, but then so has our
list of fixed bugs.

As part of the "polish" exercise, our Mac OS X packager has done a lot
of work to fix up the errors in the OS X build. If you're an OS X user,
please check our list of bugs, and let us know if you are experiencing
any of them.

Head on over to the download page to get it now!

Here's a list of bugs fixed in Alpha 4:

* 684901: Editing solid theme
* 684905: Saving a theme name
* 688647: Bible Import code requires SQLITE package to be avaliable
* 691952: To create a songs fails
* 694148: importing theme produces errors
* 598356: Slide Controller preview screen does not resize when screen size changes.
* 643506: Updating song in media manager doesn't update song in service manager
* 651076: Preview/Live issues with saved Song/Bible/Custom items loaded into Service Manager
* 652380: OpenLP1.x database fails to import in 1.9.3 with character issues
* 656177: saved ppt file to order of service
* 660448: Activating a presentation while "blank" causes presentation to go live
* 661965: Preview/Going Live of video fails in build 1093
* 685331: Service Manager fails after 1 instance
* 686103: Labels in theme wizard out of alignment on Windows
* 690335: The slides of a customs item cannot be reduced to one
* 696979: Open Service dialog shows no files
* 697271: Songs maintain the list of songs topics authors
* 594909: Editing theme name creates a theme
* 599146: Theme changes not getting saved
* 647931: OSIS Bible importer imports "1Sam.x.yy" as "1 Samual" (misspelling)
* 649999: Extra line is being added to end of Verses and Choruses
* 655102: CCLI song importer brings in some text not needed
* 657465: Media Types and File Types detection not complete
* 657712: image slides slow to open or mixed up
* 668630: Error when previewing a media file in the media manager
* 686126: OpenLP 2 song import crashes with "alternate\_title" attribute error.
* 692684: Theme Wizard not updating
* 693694: Web interface does not always send all necessary data
* 696313: "Open Last Service" incorrectly opens the most recent service
* 598393: After adding a new image to a selected (image) item in the service manager it is not selected anymore
* 626070: GStreamer backend for Phonon has issues
* 636835: songs.sqlite will not be downsized when deleting songs
* 641661: Web Bible Import doesn't handle network problems
* 693150: Custom Slide Display footer option
* 697405: Theme editor looses settings
* 656958: 'Blank to Theme' is not working for image backgrounds
* 661867: Invalid author added in song dialog
* 667837: Revision 1102 broke themes
* 668789: Bible wont display any verses when clicking search
* 674023: When adding media to the media plugin the file window does not show all supported video/audio file types.
* 693202: delete theme
* 696362: Songbook number left from previously opened song edit dialog
