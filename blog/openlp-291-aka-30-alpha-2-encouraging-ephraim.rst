.. title: OpenLP 2.9.1 aka 3.0 Alpha 2 - Encouraging Ephraim
.. slug: 2020/05/31/openlp-291-aka-30-alpha-2-encouraging-ephraim
.. date: 2020-05-31 14:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/openlp-291-aka-30-alpha-2-encouraging-ephraim.jpg

It has been a few months since the first alpha release and now the time has come for the next alpha release. We expect
to have implemented most of the new features that will be in the upcoming 3.0 release, so the next release will be a
beta release, marking the shift to focus on bugfixes and stability.

Do note that this is an alpha release and as such it is not suitable for "production use". There will be serious bugs.
There will be crashes. There is a high risk of data loss. That being said, we hope you will test this release and
report any findings to the forums or issue tracker. It is recommended to use the portable build/mode (download the
portable build for Windows, or use the -p command line argument on Linux or macOS) if you do not want to affect
existing install.

**Release highlights:**

* Fixed planning center plugin
* New service file format (faster loading of presentations from service file)
* Web remote and web complete
* Songs with Media backgrounds
* Media now supports live streams via cameras or VLC IP streams
* Changes to internals which improve the start up time 
* Tons of bugfixes.


    Have I not commanded you? Be strong and courageous. Do not be frightened, and do not be dismayed, for the Lord your
    God is with you wherever you go.

    Joshua 1:9 ESV


Full changelog:

* Remove a traceback on exiting OpenLP
* Add back toolbar separator
* Fix biblegateway webpage parsing
* New API method to return current theme
* Use single method to set service items via both position and uuid
* Update tests to match above new features
* Fix issue where chords were not being returned to the API
* Fix the clear/backspace icon (the old one doesn't exist in Debian)
* Clean up Apis and remove duplicate files
* Add new API to help testing
* Fix a traceback to wrongful path to string convertion
* Correctly hide network stream button in the theme background page.
* Fix traceback in the FTW due to the mainwindow (which is not yet created) being used
* Updated translations
* Change server send correct files for new web-remote
* Change live toolbar to use radio buttons
* Removed the live -> preview button
* Simplified button handler functions (removing duped code)
* Set new showScreen shortcut to spacebar
* Removed desktopScreenEnable button and shortcut
* Liveworship import change
* New service file format
* Fix errors in translatable texts
* Logging and Powerpoint fixes
* Fix loading optical and streaming items from servicemanager
* Always use transparency when going to desktop
* Fix loading PDF items from the servicemanager
* API improvements
* Deploy to PyPI when a tag is created
* Make OpenLP download version files from get.openlp.org
* Fix theme image transparency
* Remove global background
* Fix slow preview after fetching live image
* Add missing theme functionality
* Download the web remote as part of the FTW
* Add version checking for the web remote
* Always order the authors when exporting to OpenLyrics
* Fix core/logo hide on startup setting
* Fix display stuck as hidden and invert transparent display setting
* Fix up the formatting of the contents of the help box
* Fix presentation load from service file
* Fix some race conditions
* Remove calls to ImageManager (which no longer exists)
* Fix a crash in the remote API
* Add basic theme API
* Refactor deployment away from the web server thread
* Refactor the web remote settings tab
* Provide a way for threads to show an error message to the user
* Fix an issue where multiple zeroconf services were being run instead of a single instance on multiple addresses
* Refactored the DownloadProcess dialog
* Always return a list when searching in the API
* Fix error when adding songs from services
* Fix song editor crash - don't call a non existent function (create_slides on a service item)
* Add support for network streams
* Don't reload images on start (they are already loaded)
* Update Reveal.js to 3.9.2
* Fix vertical positioning on text slides
* Fix common settings crash
* Deregister screen-updates to the theme widget when it closes.
* Fix missing / incorrect copyright
* Update remote API to use Flask, and be more RESTful
* Made the Bible and song import more robust.
* Properly detect chords, support >5 optional splits
* Change Structure of OpenLP and move a test
* Fix bibleserver integration.
* Migrate setting definitions to Core from plugins
* Handle git styled version tags/hashes instead of bzr
* Fix planningcenter traceback
* Fix minor stuff detected by pylint.
* Create a Theme Preview dialog, plus some theme background fixes.
