// Loops

// while loop
// will run whilst the condition is true
// be careful with this one as it can cause an infinite loop
// while (condition) {
// code
// so-called "loop body"
// }

let i = 0;
while (i < 3) {
  // shows 0, then 1, then 2
  alert(i);
  i++;
}

// same as while loop but will run at least once
// do {
// loop body
// } while (condition);

// For loop
// for (begin; condition; step) {
// ... loop body ...
// }

for (let i = 0; i < 3; i++) {
  // shows 0, then 1, then 2
  alert(i);
}

// breaking the loop
let sum = 0;

while (sum > -1) {
  if (sum > 2) {
    // break the lop when sum is greater than 2
    break;
  }

  sum++;
}

// Skipping the loop
for (let i = 0; i < 10; i++) {
  // if true, skip the remaining part of the body
  if (i % 2 == 0) continue;

  alert(i); // 1, then 3, 5, 7, 9
}
