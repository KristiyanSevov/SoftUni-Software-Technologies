function solution(arr) {
    let neg = 0;
    for (let num of arr) {
        if (num == 0) {
            console.log("Positive");
            break;
        }
        if (num < 0) {
            neg++;
        }
    }
    if (neg % 2 == 0) {
        console.log("Positive")
    } else {
        console.log("Negative")
    }
}