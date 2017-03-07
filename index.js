function foo() {
    console.error('foo');
}
//process.nextTick(foo);
foo();
console.error('bar');