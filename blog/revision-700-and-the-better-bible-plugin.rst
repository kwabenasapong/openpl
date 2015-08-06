.. title: Revision 700 and the Better Bible Plugin
.. slug: 2010/02/06/revision-700-and-the-better-bible-plugin
.. date: 2010-02-06 14:02:51 UTC
.. tags: 
.. description: 

Well folks, we've reached another milestone with OpenLP 2.0 - revision
700. And not only have we reached a big revision, the Bibles plugin is
now better than before!

The importer has been reworked, both interface-wise and code-wise. It
features a Wizard style interface, well known in computer interfaces
these days, making it faster and easier to use the importer. The code
has been changed fairly dramatically now as well, to facilitate a
pluggable import system, where developers can easily add new importers
with little hacking.

General searching has also been improved. We've reduced the number of
times verses are pulled from the database, opting for an all-in-one-go
approach, which should speed up the displaying of Bible verses,
especially when displaying dual verses.

There are a few other fixes hidden in there too, but the work on the
Bibles plugin is the most prominent feature of this revision.
