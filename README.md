## Test Laravel 9 Octane with Swoole and RoadRunner - PHP 8.1

### Without Octane
```
fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c400 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.04s   557.67ms   2.00s    59.91%
    Req/Sec    27.77     23.85   120.00     73.68%
  553 requests in 5.10s, 9.89MB read
  Socket errors: connect 0, read 553, write 0, timeout 331
Requests/sec:    108.43
Transfer/sec:      1.94MB

fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c500 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 500 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.00s   563.77ms   1.99s    58.55%
    Req/Sec    39.24     33.60   111.00     65.05%
  500 requests in 5.10s, 8.94MB read
  Socket errors: connect 0, read 500, write 0, timeout 307
Requests/sec:     98.04
Transfer/sec:      1.75MB
```

### With Octane Swoole
```
fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c400 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   850.79ms  287.30ms   1.52s    72.36%
    Req/Sec    54.14     52.60   282.00     81.88%
  2008 requests in 5.07s, 35.86MB read
Requests/sec:    395.93
Transfer/sec:      7.07MB

fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c400 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   829.70ms  279.65ms   1.40s    69.37%
    Req/Sec    46.52     38.68   280.00     78.72%
  2096 requests in 5.10s, 37.43MB read
Requests/sec:    410.97
Transfer/sec:      7.34MB

fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c500 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 500 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.14s   374.66ms   1.87s    74.21%
    Req/Sec    45.61     42.20   232.00     80.17%
  1857 requests in 5.10s, 33.16MB read
Requests/sec:    364.31
Transfer/sec:      6.51MB
```

### With Octane RoadRunner
```
fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c400 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.18s   244.46ms   1.69s    79.48%
    Req/Sec    45.08     43.34   280.00     79.01%
  1418 requests in 5.09s, 25.29MB read
Requests/sec:    278.48
Transfer/sec:      4.97MB

fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c400 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.22s   429.39ms   1.88s    76.96%
    Req/Sec    57.68     63.29   270.00     80.12%
  1363 requests in 5.09s, 24.31MB read
Requests/sec:    267.69
Transfer/sec:      4.78MB

fetares@fetares-note:~/dev/laravel-octane$ wrk -t12 -c500 -d5s http://localhost
Running 5s test @ http://localhost
  12 threads and 500 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.52s   472.63ms   1.99s    83.67%
    Req/Sec    50.56     51.88   300.00     87.98%
  1342 requests in 5.08s, 23.94MB read
  Socket errors: connect 0, read 0, write 0, timeout 13
Requests/sec:    264.31
Transfer/sec:      4.71MB
```
