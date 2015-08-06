.. title: Minimum Software Versions
.. slug: 2011/05/22/minimum-software-versions
.. date: 2011-05-22 12:05:00 UTC
.. tags: 
.. description: 

About 2 and a half years ago, when we first started development on
OpenLP 2.0, we had a look at all the technologies out there in order to
decide what would be the best technologies to use in order to make a
cross-platform version of OpenLP a reality. We settled on two in
particular, a language called Python, and a graphical toolkit called Qt.
In those days, the latest version of Python was 2.5 and the latest
version of Qt was 4.4. So we made those versions our minimum software
versions, and anything older than that we didn't try to program for, and
we didn't offer support for.

Two and a half years later, we've looked at the current versions of
software, and what minimum versions we should support. We looked at our
supported operating systems, and their support, and decided to base our
minimum versions off theirs. In particular, we had a look at Ubuntu
Linux, which has two types of releases: short term support releases, and
long term support releases (better known as LTS). With this in mind, we
looked at the minimum versions of Python and Qt in Ubuntu's 10.04
release (the most recent LTS).

We aren't concerned with Windows or Mac OS X, since we have to build and
compile OpenLP completely for those platforms, whereas the Linux and
\*BSD support OpenLP natively. Since Fedora, FreeBSD, and the other
Linux and \*BSD distributions are all up-to-date, and none of them offer
the same LTS-style releases that Ubuntu does, we decided to use Ubuntu
as our yardstick.

So, as of today, the minimum software  requirements are Python 2.6, Qt
4.6 and PyQt 4.7, and the minimum version of Ubuntu is 10.04. The
minimums for Windows is XP and OS X is 10.5. Fedora's minimum version is
typically the release in development, and then all releases back to the
current release. Arch Linux is a "rolling release" distro, and so OpenLP
generally works on it. OpenLP generally works on all versions of FreeBSD
as well, since it's a source-based system, and you can generally find
the latest OpenLP package for PC-BSD as well.
