var moduleA = {
  prop: 'A',
  getProp: function() {
    return this.prop;
  }
}

var moduleB = {
  prop: 'B'
}

moduleA.getProp();
// moduleB.getProp();
moduleA.getProp.bind(moduleB)();
