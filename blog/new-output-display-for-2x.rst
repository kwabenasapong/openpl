.. title: New Output Display for 2.x
.. slug: 2010/08/28/new-output-display-for-2x
.. date: 2010-08-28 16:08:47 UTC
.. tags: 
.. description: 

Following 2 months of work, the display and text rendering code has been
replaced. Due to the magnitude of the change there may still be bugs, so
please report them in the usual way.

These changed allow a number of significant new features to become
available:

-  Text over video now works correctly.
-  Changeable image and video backgrounds now have a proper start and
   finish.
-  Text enhancements are now available like colours and styles (bold,
   italic, etc).
-  Spell checker for songs and custom slides.

Unfortunately we've had to remove two theme features as they are no
longer possible: transparent backgrounds, which was an early attempt to
implement text over video, and indentation for line wrapping. Any
transparent themes will automatically be converted to a black
background.

Also note that themes may now display slightly differently as we are
using a different display technology.

To access the new text enhancements, edit either a song or a custom
slide and you'll see a new menu has been added to the right-click
context menu of the edit box. This will allow tags to be inserted as a
pair or wrapped round selected text. We will no doubt implement a nice
WYSIWYG editor in a future release. Eventually we'll even allow the user
to define their own tags, so that they can add styles to their slides.

From a developer's point of view to code is now much simpler and easier
to maintain going forward. The new code is based on a web browser so
HTML tags now can be added to text for display. Tags are implemented
using a non-HTML tagging mechanism, so that it is easier to work with
the tags and the text.

As an additional bonus, I have added a spellcheck to the songs and
custom editors.  It makes use of the PyEnchant libraries, so Linux users
will need to add "python-enchant" (Fedora and Ubuntu) from their code
repositories, and Windows users will have to download the library
from http://www.rfk.id.au/software/pyenchant/download.html. The builds
will include this library automatically.

The screenshot you see here of the development team's favourite song is
an example of what we can achieve.
