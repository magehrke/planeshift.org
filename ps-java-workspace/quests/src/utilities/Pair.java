package utilities;

/**
 * Container to ease passing around a tuple of two objects. This object provides a sensible
 * implementation of equals(), returning true if equals() is true on each of the contained
 * objects.
 */
public class Pair<F, S> {
    public final F first;
    public final S second;

    /**
     * Constructor for a Pair.
     *
     * @param first the first object in the Pair
     * @param second the second object in the pair
     */
    public Pair(F first, S second) {
        this.first = first;
        this.second = second;
    }

	/**
	 * @return the first
	 */
	public F getFirst() {
		return first;
	}

	/**
	 * @return the second
	 */
	public S getSecond() {
		return second;
	}
}