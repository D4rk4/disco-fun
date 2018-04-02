# Disco(nnect)-fun
Set of server side tools for enhance disconnect.tcl (from cisco scripts.com) script functionality.

# Install
1. Get Russian jokes from here ore another place *magnet:?xt=urn:btih:5a255d3595ce92b429398e6e7acd6ecdbb507de1*
2. Move all MP3s to one folder, for example me use /export/tmp/mp3
3. Transcode with ffmpeg and *ulaw.sh* all jokes tracks to g711ulaw au files
4. Copy jokes in g711ulaw wave format to web server, for example to /var/www/html/disconnect/
5. Copy *disconnect.php* to web server, best place for it - /var/www/html =)
6. Configure disconnect service on CUBE side, for example I use 666 for jokes "pilot" number:
```
application
 service disconnect disk0:disconnect.tcl
  param prompt http://<server>/disconnect.php
!
dial-peer voice 666 voip
 service disconnect out-bound
 destination-pattern 666
 session target loopback:rtp
!
end
```
