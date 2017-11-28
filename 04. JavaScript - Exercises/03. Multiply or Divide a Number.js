function solution(arr) {
    let first = Number(arr[0]);
    let second = Number(arr[1]);
    if (second >= first) {
        console.log(first * second);
    } else {
        console.log(first / second);
    }
}