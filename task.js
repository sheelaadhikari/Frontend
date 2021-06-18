let arr = [1, 5, 4, 7, 2];
let i, max = arr[0];
for (i = 0; i < arr.length; i++) {
    if (arr[i] > max) {
        max = arr[i];

    }

}
console.log(max);