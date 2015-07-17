import cherrypy
import ultimatedrinker

__author__ = 'bert'

cherrypy.config.update({
    'server.socket_host': '127.0.0.1',
    'server.socket_port': 8080,
})

cherrypy.quickstart(ultimatedrinker.UltimateDrinker())
