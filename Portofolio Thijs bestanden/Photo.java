import java.util.ArrayList;
import java.util.List;

public class Photo 
{
    private int lengthInPixels;
    private int widthInPixels;
    private int dpi;
    private String description;
    private List<String> personsOnPicture;

    public Photo(int lengthInPixels, int widthInPixels, int dpi, String description) 
    {
        this.lengthInPixels = lengthInPixels;
        this.widthInPixels = widthInPixels;
        this.dpi = dpi;
        this.description = description;
        this.personsOnPicture = new ArrayList<>();
    }

    public int getLengthInPixels()
    {
        return lengthInPixels;
    }

    public int getWidthInPixels()
    {
        return widthInPixels;
    }

    public int getDpi()
    {
        return dpi;
    }

    public String getDescription()
    {
        return description;
    }

    public List<String> getPersonsOnPicture()
    {
        return personsOnPicture;
    }

    public void setLengthInPixels(int lengthInPixels)
    {
        this.lengthInPixels = lengthInPixels;
    }

    public void setWidthInPixels(int widthInPixels)
    {
        this.widthInPixels = widthInPixels;
    }

    public void setDpi(int dpi)
    {
        this.dpi = dpi;
    }

    public void setDescription(String description)
    {
        this.description = description;
    }

    public void setPersonsOnPicture(List<String> personsOnPicture)
    {
        this.personsOnPicture = personsOnPicture;
    }

    public boolean canBePrinted() 
    {
        return dpi >= 150 && lengthInPixels >= 585 && widthInPixels >= 878;
    }

    public boolean isGroupPicture() 
    {
        return personsOnPicture.size() > 2;
    }
}