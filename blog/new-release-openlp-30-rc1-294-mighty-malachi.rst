.. title: New Release: OpenLP 3.0 RC1 (2.9.4) Mighty Malachi
.. slug: 2022/01/18/new-release-openlp-30-rc1-294-mighty-malachi
.. date: 2022-01-18 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/new-release-openlp-30-rc1-294-mighty-malachi.jpg

Time for the first release candidate for 3.0 - we're getting really close now!

Basically, if no issues are detected with this release it will become the 3.0 release.

Bug fixes since beta 2
----------------------

* Dark mode fixes
* Fix of problem showing presentations after media items
* Fix issues when adding service items remotely
* Default to the first screen if there is no display screen
* Correction of previous fix for setting slide numbers in footers
* Various code clean ups especially Alerts.
* Fix media issues with DVD playing
* Resolve issues with formatting Tags 
* Fix bugs from the beta 2 release

This release should be nearly ready for production, but there might be a few bugs left here and
there. Make sure to report them if you find any!

.. warning::

   Installing this version of OpenLP will override any other installation of OpenLP you already have.
   Please make a backup of your data!


.. warning::

   macOS may report OpenLP as damaged. If you encounter this problem, you can try the following solution. From
   Applications / Utilities run Terminal. In Terminal, type in the following command::

      xattr -dr com.apple.quarantine /Applications/OpenLP.app

   We are working on a remedy for this problem, but this command should tie you over till we get it sorted out.

.. warning::

   For Linux users, due to the immaturity of Wayland, OpenLP does not behave well and it is recommended
   that X11 is used as the display manager.


Downloads
---------

.. raw:: html

   <div class="text-center" style="margin-bottom: 2em">
    <div class="btn-group">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-windows"></i>
        Windows
        &nbsp;
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="https://get.openlp.org/2.9.4/OpenLP-2.9.4-x64.msi">64-bit Installer</a></li>
        <li><a href="https://get.openlp.org/2.9.4/OpenLPPortable_2.9.4.0-x64.paf.exe">64-bit Portable</a></li>
        <li><a href="https://get.openlp.org/2.9.4/OpenLP-2.9.4.msi">32-bit Installer</a></li>
        <li><a href="https://get.openlp.org/2.9.4/OpenLPPortable_2.9.4.0-x86.paf.exe">32-bit Portable</a></li>
      </ul>
    </div>
    <a class="btn btn-default" href="https://get.openlp.org/2.9.4/OpenLP-2.9.4.dmg">
      <i class="fa fa-apple"></i> macOS 10.12+
    </a>
    <a class="btn btn-ubuntu" href="https://get.openlp.org/2.9.4/openlp_2.9.4-1_all.deb">
      <img class="icon notranslate" src="/images/ubuntu-logo.png"/> Ubuntu
    </a>
    <a class="btn btn-debian" href="https://get.openlp.org/2.9.4/openlp_2.9.4-1_all.deb">
      <img class="icon notranslate" src="/images/debian-logo.png"/> Debian
    </a>
    <a class="btn btn-fedora" href="https://copr.fedorainfracloud.org/coprs/trb143/OpenLP/">
      <img class="icon notranslate" src="/images/fedora-logo.png"/> Fedora
    </a>
    <a class="btn btn-success" href="https://get.openlp.org/2.9.4/OpenLP-2.9.4.tar.gz"><i class="fa fa-file-archive-o"></i> Source</a>
   </div>
