export default function (hash) {
    return (
        window.location.hash &&
        window.location.hash.substring(1) === hash
    );
}
