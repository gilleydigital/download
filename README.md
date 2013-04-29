## Easy file downloads for Kohana 3.3

This tiny module makes it easy to use Kohana's send_file to force a download, rather than linking directly to the file.

Setup
----------
First, install download like you would any other Kohana module:

1. Clone or download it into a folder called "download" in your modules folder.
2. Add it to the Kohana::modules call in bootstrap.php in your application folder.

Now just drop any file into a folder called "downloads" in your document root, and link to /downloads/FILENAME.

The controller will route the request and set up correct headers so users will always see a download prompt rather than the browser trying to handle the file.