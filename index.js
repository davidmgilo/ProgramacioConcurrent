function b(cb) {
    console.log('b');
    cb();
};

// b();

b(function () {
    console.log('a');
});