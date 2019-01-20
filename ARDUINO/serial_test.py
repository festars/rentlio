import tornado.ioloop
import tornado.web
import serial #for Serial communication
import time #for delay function

arduino = serial.Serial('/dev/cu.usbmodem14211',9600) #Create Serial port object called arduinoSerialData
time.sleep(2) #wait for 2 secounds for the communication to get established

class OnHandler(tornado.web.RequestHandler):
    def get(self):
        arduino.write('1') #send 1
        self.write("Hello, world")

class OffHandler(tornado.web.RequestHandler):
    def get(self):
        arduino.write('0') #send 0
        self.write("Hello, world")

def make_app():
    return tornado.web.Application([
        (r"/", MainHandler),
        (r"/dicks", DickHandler),
        (r"/turnon", OnHandler),
        (r"/turnoff", OffHandler),
    ])

if __name__ == "__main__":
    app = make_app()
    app.listen(8888)
    tornado.ioloop.IOLoop.current().start()
