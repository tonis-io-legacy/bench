# Benchmarks

Simple benchmark setup to test the "Hello World" of Lumen, Silex, Slim, and Tonis.

# Usage

```sh
git clone git@github.com:tonis-io/bench
cd bench
./bin/bench.php [lumen|silex|tonis|slim]
ab -n 1000 http://127.0.0.1:8080/hello/foo
```
