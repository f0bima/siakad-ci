## Admin Login

- email : admin@admin.com
- pass  : admin123

## Database
Import => app.sql

## PHP > 8
tambahkan kode berikut 
```PHP
#[\ReturnTypeWillChange]
```
diatas baris:
- public function open($save_path, $name)
- public function read($session_id)
- public function write($session_id, $session_data)
- public function close()
- public function destroy($session_id)
- public function gc($maxlifetime)


