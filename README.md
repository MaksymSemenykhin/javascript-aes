# JavaScriptAES
AES implementation in JavaScript


Usage: this implementation would be invoked as follows:
```
  var password = 'L0ck it up saf3';
  var plaintext = 'pssst ... đon’t tell anyøne!';
  var ciphertext = Aes.Ctr.encrypt(plaintext, password, 256);
  var origtext = Aes.Ctr.decrypt(ciphertext, password, 256);

/**
 * Encrypt a text using AES encryption in Counter mode of operation.
 *
 * Unicode multi-byte character safe
 *
 * @param   {string} plaintext - Source text to be encrypted.
 * @param   {string} password - The password to use to generate a key for encryption.
 * @param   {number} nBits - Number of bits to be used in the key; 128 / 192 / 256.
 * @returns {string} Encrypted text.
 *
 * @example
 *   var encr = Aes.Ctr.encrypt('big secret', 'pāşšŵōřđ', 256); // 'lwGl66VVwVObKIr6of8HVqJr'
 */

/**
 * Decrypt a text encrypted by AES in counter mode of operation
 *
 * @param   {string} ciphertext - Cipher text to be decrypted.
 * @param   {string} password - Password to use to generate a key for decryption.
 * @param   {number} nBits - Number of bits to be used in the key; 128 / 192 / 256.
 * @returns {string} Decrypted text
 *
 * @example
 *   var decr = Aes.Ctr.decrypt('lwGl66VVwVObKIr6of8HVqJr', 'pāşšŵōřđ', 256); // 'big secret'
 */
```
Sourse http://www.movable-type.co.uk/scripts/aes.html
