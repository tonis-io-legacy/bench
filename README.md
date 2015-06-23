# Benchmarks

Simple benchmark setup to test the "Hello World" of Lumen, Silex, Slim, and Tonis.

# Usage

```sh
git clone git@github.com:tonis-io/bench
cd bench
./bin/bench.php [lumen|silex|slim|slim3|tonis]
ab -n 1000 http://127.0.0.1:8080/hello/foo
```

# Results

Lumen: 0.829 ms
Silex: 1.182 ms
Slim: 0.561 ms
Slim3: 0.718 ms
Tonis: 0.742 ms
