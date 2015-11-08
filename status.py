#!/usr/bin/env python3
import sqlite3,serial

ser = serial.Serial('/dev/ttyUSB0',baudrate=9600)
res = int(ser.readline())
res_map = int(100 - (((res - 275) * (99)) / (1023 - 275)) + 1)

conn = sqlite3.connect('/var/www/html/farm/farm.db')
c = conn.cursor() 
c.execute('UPDATE status SET humidity_map = ?',[res_map])
c.execute('UPDATE status SET humidity = ?',[res])
c.execute('SELECT humidity FROM status')

conn.commit()
conn.close()


print (res)
