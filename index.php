<?php

# 1.
print("Hello");

$app = new Application();

$app -> $router -> get("/", function () {
    return "Hello world";
})

$app -> userRouter($router);

$app -> run();