# JavaScriptAES
AES implementation in JavaScript


Usage: this implementation would be invoked as follows:
```
  var password = 'L0ck it up saf3';
  var plaintext = 'pssst ... đon’t tell anyøne!';
  var ciphertext = Aes.Ctr.encrypt(plaintext, password, 256);
  var origtext = Aes.Ctr.decrypt(ciphertext, password, 256);
```

Sourse http://www.movable-type.co.uk/scripts/aes.html
