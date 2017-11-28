function solution(arr) {
    let results = new Map();
    for (let i = 0; i < arr.length-1; i++) {
        let kvp = arr[i].split(' ');
        let key = kvp[0];
        let value = kvp[1];
        results.set(key, value);
    }
    let key = arr[arr.length-1];
    if (results.has(key)) {
        console.log(results.get(key));
    } else {
        console.log("None");
    }
}