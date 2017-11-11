function solution(arr) {
    let n = Number(arr[0]);
    let results = [];
    for (let i = 1; i <= n; i++) {
        if (String(i) == String(i).split("").reverse().join("")) {
            results.push(i);
        }
    }
    console.log(results.join(" "));
}