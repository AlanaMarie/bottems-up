__author__ = 'bert'

import cherrypy


class UltimateDrinker(object):
    @cherrypy.expose
    def index(self):
        return "Hello world!"
