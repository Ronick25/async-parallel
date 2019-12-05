# Pet-project

The repository is intended to practice with parallel and asynchronous coding in PHP.

## Asynchronous test
Both scripts make 3 requests to the node server which has a timeout for 1 sec before the response.

**sequential.php** script makes requests sequentially while **async.php** script makes requests asynchronously.

### Running
```
node src/async-test/server.js
php src/async-test/sequential.php
php src/async-test/async.php
```

### Results

Average execution time:
- **sequential.php** - 3.010 sec
- **async.php** - 1.012 sec

## Parallel test

Both scripts generate an array of words of random length and find the longest one.
**sequential.php** script iterate through the array of words sequentially while **async.php** distributes the work across 12 threads.

### Running
```
php src/parallel-test/sequential.php
php src/parallel-test/async.php
```

### Results
Scripts were running on the machine with 12 CPU cores.

|                | Sequential, sec | Parallel, sec |
|----------------|-----------------|---------------| 
|120000 words    | 0.038           | 0.156         |
|1200000 words   | 0.384           | 0.186         |
|12000000 words  | 3.854           | 0.561         |
|120000000 words | 38.588          | 4.363         |
