import { useEffect, useState } from 'react'
import './App.css'
function App() {
 const [users, setUsers] = useState([])
 const [loading, setLoading] = useState(true)
 useEffect(() => {
 fetch('https://jsonplaceholder.typicode.com/users')
 .then(res => res.json())
 .then(data => {
 setUsers(data)
 setLoading(false)
 })
 .catch(err => {
 console.error('Błąd pobierania danych:', err)
 setLoading(false)
 })
 }, [])
 return (
 <div className="wrapper">
 <header>
 <h1>
$
 Lista użytkowników</h1>
 <p>Dane pobrane z backendu (JSONPlaceholder)</p>
 </header>
 {loading ? (
 <p className="loading">Ładowanie użytkowników...</p>
 ) : (
 <div className="user-grid">
 {users.map(user => (
 <div className="user-card" key={user.id}>
 <h2>{user.name}</h2>
 <p><strong>Email:</strong> {user.email}</p>
 <p><strong>Miasto:</strong> {user.address.city}</p>
 <p><strong>Firma:</strong> {user.company.name}</p>
 <a href={`http://${user.website}`} target="_blank"
rel="noreferrer">

%
 Strona: {user.website}
 </a>
 </div>
 ))}
 </div>
 )}
 </div>
 )
}
export default App