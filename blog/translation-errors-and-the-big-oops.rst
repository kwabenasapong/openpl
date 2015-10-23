.. title: Translation Errors and The Big Oops
.. slug: 2015/10/23/translation-errors-and-the-big-oops
.. date: 2015-10-23 19:00:00 UTC
.. tags:
.. category:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/translation-errors-and-the-big-oops.jpg

With much fanfare, we released OpenLP 2.2 last Sunday. It's been a roaring success so far, but sadly it has also been
plagued by unforseen bugs. A number of users have had OpenLP just crash on startup, and some folks have been unable to
play videos. In this blog post, I'll show you how to figure out which issue you're running into, and a workaround for
it until we can get a fix out (hopefully in the next 2-3 weeks).

There have been two main problems which cause OpenLP 2.2 to crash on startup. Firstly, three languages were hit by
translation errors, and secondly, OpenLP on Linux won't start up due to VLC being missing.

The issues with videos can be divided into two situations. Firstly, our initial build of OpenLP for Windows was unable
to detect VLC, and secondly, some folks might have been using video players that are not supported on their platforms
anymore.

Translation Issues
^^^^^^^^^^^^^^^^^^
The three languages affected by the translation bug are German, Estonian and Chinese (Taiwan). Fortunantely there is a
workaround, just change the language back to the default English. But since OpenLP can't start you'll have have to
change the settings where the settings are stored, which differs on platform.

Diagnosing the Problem
----------------------
When this bug hits you'll see an error window opening up on startup, and the following Python traceback will be in
there:

.. code:: python

    Traceback (most recent call last):
       File "<string>", line 44, in <module>
       File "/Users/raoul/Projects/OpenLP/OpenLP-2.2/openlp/core/__init__.py", line 388, in main
       File "/Users/raoul/Projects/OpenLP/OpenLP-2.2/openlp/core/__init__.py", line 141, in run
       File "/Users/raoul/Projects/OpenLP/OpenLP-2.2/openlp/core/ui/mainwindow.py", line 526, in __init__
       File "/Users/raoul/Projects/OpenLP/OpenLP-2.2/openlp/core/ui/aboutform.py", line 44, in __init__
       File "/Users/raoul/Projects/OpenLP/OpenLP-2.2/openlp/core/ui/aboutform.py", line 50, in _setup
       File "/Users/raoul/Projects/OpenLP/OpenLP-2.2/openlp/core/ui/aboutdialog.py", line 82, in setup_ui
       File "/Users/raoul/Projects/OpenLP/OpenLP-2.2/openlp/core/ui/aboutdialog.py", line 264, in retranslate_ui
    TypeError: not all arguments converted during string formatting

Fixing the Problem
------------------
**To change language on Windows:**

1. Click on Start, Run
2. Type in ``regedit.exe`` and press Enter
3. Navigate down the tree to the OpenLP folder which is located at: ``HKEY_CURRENT_USER\Software\OpenLP\OpenLP\core``
4. Click the attribute ``language`` and change it to ``en`` for English
5. Save and close the Registry Editor
6. Start OpenLP

**To change language on Linux:**

1. Open a text editor (Kate on KDE, Gedit on Gnome or Ubuntu)
2. Open a file and look for ``/home/<user>/.config/OpenLP/OpenLP.conf`` (you may need to tell your file dialog to show
   hidden files)
3. In the ``[core]`` section find ``language`` and change it to ``en`` for English
4. Save the file and close your editor
5. Start OpenLP

**To change language on Mac OS X:**

1. Open Finder and go to *Applications*
2. In *Applications*, open the *Utilities* folder
3. Open the *Terminal* application, this will open up a command prompt
4. Type in ``defaults write org.openlp.OpenLP core.language en`` exactly as you see it here, and press <Enter>
5. Close *Terminal*
6. Start OpenLP

VLC On Linux
^^^^^^^^^^^^
In some Linux distributions (notably Ubuntu and its derivatives), you may encounter and error when starting OpenLP.

Diagnosing the Problem
----------------------
When OpenLP starts, you'll see an error window with the following traceback:

.. code:: python

    Traceback (most recent call last):
      File "/usr/bin/openlp", line 44, in <module>
        main()
      File "/usr/share/openlp/openlp/core/__init__.py", line 384, in main
        sys.exit(application.run(qt_args))
      File "/usr/share/openlp/openlp/core/__init__.py", line 142, in run
        Registry().execute('bootstrap_initialise')
      File "/usr/share/openlp/openlp/core/common/registry.py", line 137, in execute
        result = function(*args, **kwargs)
      File "/usr/share/openlp/openlp/core/lib/pluginmanager.py", line 60, in bootstrap_initialise
        self.hook_media_manager()
      File "/usr/share/openlp/openlp/core/lib/pluginmanager.py", line 122, in hook_media_manager
        plugin.create_media_manager_item()
      File "/usr/share/openlp/openlp/core/lib/plugin.py", line 204, in create_media_manager_item
        self.media_item = self.media_item_class(self.main_window.media_dock_manager.media_dock, self)
      File "/usr/share/openlp/openlp/plugins/media/lib/mediaitem.py", line 56, in __init__
        super(MediaMediaItem, self).__init__(parent, plugin)
      File "/usr/share/openlp/openlp/core/lib/mediamanageritem.py", line 82, in __init__
        self.setup_item()
      File "/usr/share/openlp/openlp/plugins/media/lib/mediaitem.py", line 86, in setup_item
        self.media_controller.setup_display(self.display_controller.preview_display, False)
      File "/usr/share/openlp/openlp/core/ui/media/mediacontroller.py", line 322, in setup_display
        player.setup(display)
      File "/usr/share/openlp/openlp/core/ui/media/vlcplayer.py", line 147, in setup
        display.vlc_instance = vlc.Instance(command_line_options)
      File "/usr/share/openlp/openlp/core/ui/media/vendor/vlc.py", line 1359, in __new__
        return libvlc_new(len(args), args)
      File "/usr/share/openlp/openlp/core/ui/media/vendor/vlc.py", line 3355, in libvlc_new
        ctypes.c_void_p, ctypes.c_int, ListPOINTER(ctypes.c_char_p))
      File "/usr/share/openlp/openlp/core/ui/media/vendor/vlc.py", line 211, in _Cfunction
        raise NameError('no function %r' % (name,))
    NameError: no function 'libvlc_new'

Fixing the Problem
------------------
The workaround is really simple: install VLC.

Missing VLC on Windows
^^^^^^^^^^^^^^^^^^^^^^
If you were previously using VLC in Windows, and now can no longer play any media, this is probably due to a problem
that arose when building OpenLP for Windows.

Diagnosing the Problem
----------------------
When OpenLP starts you'll see an error window appear, and there should be a traceback like the one below:

.. code:: python

    Traceback (most recent call last):
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\servicemanager.py", line 1462, in on_make_live
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\servicemanager.py", line 1478, in make_live
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\slidecontroller.py", line 808, in add_service_manager_item
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\slidecontroller.py", line 896, in _process_item
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\slidecontroller.py", line 1360, in on_media_start
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\media\mediacontroller.py", line 376, in video
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\media\mediacontroller.py", line 532, in _check_file_type
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\media\mediacontroller.py", line 345, in resize
       File "D:\OpenLP_Development\OpenLP_Code\2.2\openlp\core\ui\media\vlcplayer.py", line 234, in resize
    AttributeError: 'MainDisplay' object has no attribute 'vlc_widget'

Fixing the Problem
------------------
The fix for this is really easy. We've already re-built OpenLP for Windows with a fix. Just re-download OpenLP and
re-install it.

Missing Media Player
^^^^^^^^^^^^^^^^^^^^
In some instances you might find that you cannot play any videos.

Diagnosing the Problem
----------------------
When you try to play media, you get an error message like this:

    File type unsupported

Fixing the Problem
------------------
Some of the older built-in media players aren't currently supported in Windows and Mac OS X. If you encounter this,
simply `download and install VLC`_, restart OpenLP, and you should be able to select VLC as your media player.

Rolling out Fixes
^^^^^^^^^^^^^^^^^
We're really busy trying to track down and fix these issues, but as you can imagine it's not always that simple or that
easy, so please be patient. We are hoping to get a release out by the end of next week. In the case of the
translations, if you speak that language, please can you check out the `project on Transifex`_ and see if you can help
fix it.

Thanks for your patience and your support!

[ Image Credit: `Coccinella - Lady bug, Macro`_ ]

.. _download and install VLC: http://videolan.org/
.. _project on Transifex: https://www.transifex.com/openlp/openlp/openlp-22x/
.. _Coccinella - Lady bug, Macro: https://www.flickr.com/photos/ainet/2599394171/

