import urllib
import time
import os
uri = "http://jesuisuneurlàrefresh.php"  
source = urllib.urlopen(uri).read()
nw_source=source 
cntr=0
flg=True
while nw_source==source:
    if flg:
      time.sleep(30)
    try:
      nw_source = urllib.urlopen(uri).read()
    except IOError:
      print "Error in reading url"
      flg=False
      continue 
    cntr+=1
    print cntr," times refreshed"
  
