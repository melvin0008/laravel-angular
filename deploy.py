#!/usr/bin/python

import httplib, urllib, sys, os, subprocess,shutil
import couchdbkit
from couchdbkit.designer import pushapps

server=couchdbkit.Server('http://127.0.0.1:5984')

def main():
	for serverName in ['couchwrite']:
		for (root,dirs,files) in os.walk(serverName):
			for dir in dirs:
				if root.split('/')[-1]==serverName and dir[0]!='.':
					print 'Pushing '+os.path.join(root,dir)
					db=server.get_db(dir)
					pushapps(os.path.join(root,dir),db)


if __name__=="__main__":
       main();
