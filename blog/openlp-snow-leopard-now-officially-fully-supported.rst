.. title: OpenLP on Snow Leopard is now officially fully supported!
.. slug: 2011/08/10/openlp-snow-leopard-now-officially-fully-supported
.. date: 2011-08-10 12:08:30 UTC
.. tags: 
.. description: 

| To give a little bit of history: a big item for our OpenLP 1.9.6 (Beta
2) release was to fix the JPEG support on Snow Leopard (OS X 10.6), not
just on Leopard (OS X 10.5) - see this ticket. But it turns out that was
not that easy to fix, as during packaging OpenLP it somehow get left
out. For packaging we are using PyInstaller which does support packaging
for OS X, but in this particular case the libraries were not being
packaged correctly. Because of this bug in PyInstaller, fixing this
issue was delayed until after the official release date of Beta 2. Kudos
goes to Martin for fixing that issue:
http://www.pyinstaller.org/ticket/373
| Now that the official fix is available, we have repacakged OpenLP for
OS X, and made it available as OpenLP 1.9.6.1, a special release for
Snow Leopard (OS X 10.6) with JPEG support. This now enables users of
Snow Leopard to use the JPEG format in images and theme backgrounds.
Here's a direct download link:
http://sourceforge.net/projects/openlp/files/openlp/1.9.6/OpenLP-1.9.6.1.dmg/download
Enjoy!
| To answer a recent question about OS X 10.7, aka Lion: unfortunately
at this point in time we cannot estimate when OpenLP will be officially
supported on Lion (OS X 10.7). Currently the GUI toolkit we use (Qt) has
some glitches on that new version of OS X that need to be fixed before
we can create an official OpenLP package for Lion. But as you can see,
we are working on it!
