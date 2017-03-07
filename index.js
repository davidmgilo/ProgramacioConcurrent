function foo() {
    console.error('foo');
}
process.nextTick(foo);
//setTimeout(foo,0);
console.error('bar');